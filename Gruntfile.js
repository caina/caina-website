var javascript_path = "assets/development/js/";

module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      sass: {
        files: 'assets/development/scss/{,*/}*.{scss,sass}',
        tasks: ['sass']
      },
      css: {
        files: [
          'assets/development/css/*.css'
        ],
        tasks: ['cssmin']
      },
      js: {
        files: [
          'assets/development/js/*.js',
          'Gruntfile.js'
        ],
        tasks: ['jshint','uglify','cssmin']
      }
    },
    jshint: {
      all: ['Gruntfile.js', 'assets/js/custom.js']
    },

    sass: {                              
      dist: {                            
        options: {                       
          style: 'expanded'
        },
        files: {                         
          'assets/development/css/sass.css': 'assets/development/scss/custom.sass'
        }
      }
    },

    uglify: {
    	options: {
	      compress: {
	        drop_console: true
	      },
        mangle: {
          except: ['jQuery','container']
        },
        beautify: false
	    },
	    my_target: {
	      files: {
          'assets/js/min.js': [
              javascript_path+"jquery-2.1.4.min.js",
              javascript_path+'bootstrap.min.js',
              javascript_path+'parallax.min.js',
              javascript_path+'custom.js'
            ]
	      }
	    }
	  },
	  cssmin: {
		  options: {
		     keepSpecialComments: 0
		  },
		  target: {
		    files: {
		      'assets/css/min.css': ['assets/development/css/*.css']
		    }
		  }
		}
  });

  // Load the Grunt plugins.
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');


  // Register the default tasks.
  grunt.registerTask('default', ['watch']);
};