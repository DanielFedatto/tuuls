
module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
        '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
        '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
        ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
        //Task do Less :)
        less: {
            dist: {
                options: {
                    compress: false,
                    strictImports: true
                },
                files: {
                    './assets/css/styles.css': './assets/css/styles.less'
                }
            }
        },
        //Task que deixa seu código css 100% compatível com todos os outros navegadores
        //Minifica os arquivos
        postcss: {
            options: {
                map: false,
                processors: [
                  require('pixrem')({replace:false}), // Transforma os Px em Rem
                  require('autoprefixer')({browsers: 'last 2 versions'}), // Compatibilidade de navegadores
                  require('postcss-inline-svg'), // Permite a manipulação de svg dentro do css
                  require('postcss-svgo'), // Minifica o svg dentro do css
                  require('cssnano'), // minify the result
                ]
            },
            dist: {
              src: './assets/css/styles.css',
              dest: './css/styles.min.css'
            }
        },
        //Task para concatenar e agrupar plugin junto ao seu js principal (deve ser executado sempre antes do uglify)
        concat: {
            options: {
              separator: ';',
            },
            dist: {
              src: ['./assets/js/function.js',
              ],
              dest: './js/funcoes.js',
            },
        },
        //Utilizado para alterar o código do js, escondendo e "enfeiando" o seu código, Também minifica parcialmente
        uglify: {
            my_target: {
              files: {
                './js/funcoes.min.js': ['./js/funcoes.js']
              }
            }
        },
        //Task utilizada para "assistir" as alterações no código, ajuda a debugar o seu código principalmente LESS
        watch: {
            grunt: {
                options: {
                reload: true
                },
                files: ['Gruntfile.js']
            },
            css: {
                files: ['./assets/css/**/*.less', './assets/css/*.less'],
                tasks: ['less', 'postcss']
            },
            concat: {
                files: ['./assets/js/*.js'],
                tasks: ['concat'],
            },
            uglify: {
                files: ['./assets/js/*.js'],
                tasks: ['uglify']
            }
        },
        //Task utilizada para mostrar as alterações realizadas em "tempo real" no navegador
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        '*.html',
                        'css/*.css',
                        'js/*.js',
                        'images/*'
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: 'localhost',
                    debugInfo: true,
                    ui: false,
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-rsync');
    grunt.registerTask('sync', ['browserSync']);
    grunt.registerTask('default', ['less','postcss','browserSync','concat', 'uglify', 'watch']);
}
