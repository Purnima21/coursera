$(function() {
    $('.saveCourses').on('click', function(e) {
    	var id = $(this).data('id')
    	var name = $(this).data('name')
    	var type = $(this).data('type')
    	var slug = $(this).data('slug')
    	console.log(name)
    	console.log(id, '--', name, '--', type, '---', slug)
    	$.ajax({
		    type:"POST",
		    url:"/api/1.0/addCourse",
		    data : {
		    	id : id,
		    	name : name,
		    	courseType : type,
		    	slug : slug
		    },
		    success: function(data){

		      alert("Course added");
		      $('#addCourses').trigger("reset");
		    },

		    error: function(data){

		      alert("You already saved this course");
		      $('#addCourses').trigger("reset");
		    }
		});
    })
});
