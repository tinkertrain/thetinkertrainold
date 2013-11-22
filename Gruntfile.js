module.exports = function(grunt) {
  'use strict';

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
      files: {
        src: 'styles/main.css'
      }
    },

    //Process Javascript
    uglify: {
      my_target: {
        files: {
          'scripts/main-min.js': ['bower_components/slabText/js/jquery.slabtext.js', 'scripts/main.js'],
          'scripts/work-min.js': ['scripts/work.js'],
        }
      }
    },

    browser_sync: {
      files: {
        src : [
            'styles/*.css',
            'images/**/*.jpg',
            'images/**/*.png',
            'scripts/*.js',
            '**/*.php',
            '**/*.html',
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

        autoprefixer: {
          files: ['styles/main.css'],
          tasks: ['autoprefixer']
        },

        /* watch and see if our javascript files change */
        js: {
          files: ['scripts/*.js'],
          tasks: ['uglify']
        },

      }

    });

  //Load plugins
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');

  //Task list
  grunt.registerTask('default', ['browser_sync', 'watch']);
};
