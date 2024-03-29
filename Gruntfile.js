module.exports = function(grunt) {

  'use strict';

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    //Process CSS
    compass: {
      dev: {
        options: {
          config: 'config.rb',
          force: true
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 versions']
      },
      my_target: {
        src: 'styles/main.css'
      },
    },

    csso: {
      dist: {
        files: {
          'styles/main.css': ['styles/main.css']
        }
      }
    },

    modernizr: {
      devFile: 'scripts/modernizr-latest.js',
      outputFile: 'scripts/modernizr-custom.js',

      extra: {
        shiv: true,
        mq: true
      },

      // Minify
      uglify: true,
    },

    //Process Javascript
    uglify: {
      my_target: {
        files: {
          'scripts/dist/main-min.js': ['bower_components/slabText/js/jquery.slabtext.js', 'scripts/main.js'],
          'scripts/dist/work-min.js': ['bower_components/slabText/js/jquery.slabtext.js', 'scripts/main.js', 'scripts/work.js'],
          'scripts/dist/blog-min.js': ['bower_components/slabText/js/jquery.slabtext.js', 'scripts/main.js', 'scripts/blog.js'],
        }
      }
    },

    browser_sync: {
      files: {
        src : [
            'styles/*.css',
            'images/**/*.jpg',
            'images/**/*.png',
            'scripts/dist/*.js',
            '*.php',
            '*.html',
          ],
        },
        options: {
          watchTask: true,
        },
      },

      watch: {

        /* watch to see if the sass files are changed, compile and add prefixes */
        compass: {
          files: ['sass/**/*.scss'],
          tasks: ['compass:dev']
        },

        styles: {
          files: ['styles/main.css'],
          tasks: ['autoprefixer:my_target', 'csso:dist']
        },

        /* watch and see if our javascript files change */
        js: {
          files: ['scripts/*.js'],
          tasks: ['newer:uglify:my_target']
        },

      },

      concurrent: {
        dev: [
          'compass',
          'uglify',
        ]
      }

    });

  //Task list
  grunt.registerTask('default', ['browser_sync', 'concurrent:dev', 'watch']);
};
