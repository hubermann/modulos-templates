/*globals module, require, $ */
module.exports = function (grunt) {
 
	grunt.initConfig({ 
		
		pkg: grunt.file.readJSON('package.json'),

		//validar JS
		jshint: {
			options: {
				reporter: require('jshint-stylish')
			},

			build: ['Gruntfile.js', 'src/**/*.js']
		},

		//minificar con uglify
		uglify: {
			options: {
				banner: '/*\n <%= pkg.name %> \n Gabriel Hubermann | Hubermann.com | Buenosweb.com \n e: hubermann@gmail.com \n <%= grunt.template.today("yyyy-mm-dd") %> \n */\n'
			},
			build: {
				files: {
					'dist/js/main.min.js': 'src/js/*.js'
				}
			}
		},

		//compilar css com less
		less: {
      options: {
				banner: '/*\n <%= pkg.name %> \n Gabriel Hubermann | Hubermann.com | Buenosweb.com \n e: hubermann@gmail.com \n<%= grunt.template.today("yyyy-mm-dd hh:mm:ss") %> \n */\n'
			},
			build: {
				files: {
					//vamos a compilar 'src/less/main.less' >> 'dist/css/styles.css'
					'dist/css/main.css': 'src/less/main.less'
				}
			}
		},
    //contact css
    
    concat_css: {
        options: {
					banner: '/*\n <%= pkg.name %> \n Gabriel Hubermann | Hubermann.com | Buenosweb.com \n e: hubermann@gmail.com \n<%= grunt.template.today("yyyy-mm-dd hh:mm:ss") %> \n */\n'
        },
        all: {
          src: ["dist/css/main.css"],
          dest: "dist/css/styles.css"
        },
    },

		// cssmin
		cssmin: {
			build: {
				src: ["dist/css/styles.css"],
        dest: "dist/css/styles.min.css"
			}
		},
    watch: {
        files: ['src/less/main.less', 'dist/css/main.css'],
        tasks: ['less', 'uglify','concat_css'],
        options: {
            spawn: false,
            livereload: true
        }
    }


	});

	//levantar modulos 
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-concat-css');
	grunt.loadNpmTasks('grunt-contrib-watch');

	//todas las tareas en una
	grunt.registerTask('default', ['jshint', 'less', 'concat_css', 'uglify', 'cssmin']);
  grunt.registerTask('look', ['watch']);
  grunt.registerTask('min', ['uglify', 'cssmin']);

};