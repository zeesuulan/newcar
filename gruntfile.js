// 包装函数
module.exports = function(grunt) {

  // 任务配置
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    connect: {
      all: {
        options: {
          port: 9001,
          base: __dirname,
          //directory: 'web',
          hostname: '*',
          //keepalive: true,
          debug: true,
          middleware: function(connect) {
            return [
              require('json-proxy').initialize({
                proxy: {
                  forward: {
                    // '/api': 'http://mobile.hunantv.com/',
                    // '/video': 'http://mobile.hunantv.com/',
                    // '/Search': 'http://mobile.hunantv.com/'
                  },
                  headers: {
                    'Host': 'mobile.hunantv.com',
                    'Origin': 'http://mobile.hunantv.com',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json'
                  }
                }
              }),
              require('connect-livereload')(),
              connect.static(__dirname)
            ]
          }
        }
      }
    },
    watch: {
      options: {
        livereload: true
      },
      scripts: {
        // files: ['static/js_source/**/*.js'],
        files: ['*.html', 'template/*.html', 'js/**/*.js', 'css/*.css', 'less/*.less'],
        tasks: ['less:all','concat:all', 'uglify'],
          options: {
          spawn: false,
        },
      },
    },
    concat: {
      all: {
        files: [{
          src: ['js/lib/zepto.js', 'js/lib/zepto.cookie.js', 'js/lib/angular.js', 'js/lib/angular-route.js', 'js/lib/app.js'],
          dest: 'js/lib/lib.js'
        }, {
          src: ['js/controller/*', '!js/controller/c.js'],
          dest: 'js/controller/c.js'
        }, {
          src: ['js/directive/*', '!js/directive/d.js'],
          dest: 'js/directive/d.js'
        }, {
          src: ['js/service/*', '!js/service/s.js'],
          dest: 'js/service/s.js'
        }, {
          src: ['css/*', '!css/css.css'],
          dest: 'css/css.css'
        }]
      }
    },
    less: {
      all: {
        options: {
          paths: ["css"],
          cleancss: true,
        },
        files: {
          "css/main.css": "less/main.less"
        }
      }
    },
    uglify: {
      options: {
        mangle: true,
        compress: {
          // drop_console: true
        }
      },
      my_target: {
        files: {
          // '../output/js/controller/c.js': ['../output/js/controller/c.js'],
          // '../output/js/lib/lib.js': ['../output/js/lib/lib.js'],
          // '../output/js/directive/d.js': ['../output/js/directive/d.js'],
          // '../output/js/service/s.js': ['../output/js/service/s.js'],
          // '../output/js/widget/w.js': ['../output/js/widget/w.js']
          'static/js/control.js': ['static/js_source/control.js'],
          'static/js/index.js': ['static/js_source/index.js'],
          'static/js/update.js': ['static/js_source/update.js']
        }
      }
    }
  });

  // 任务加载
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-less');

  // 自定义任务
  // grunt.registerTask('default', ['connect:all', 'watch']);
  grunt.registerTask('build', ['watch']);

};