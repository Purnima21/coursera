function getData(page) {
	var url = ''
		url = '/api/1.0/getSavedCourses?page=' + page + '&pagesize=10';
	$.ajax({
	    url: url,
	    type: 'GET',
	})
	.done(function( json ) {
		var html = "";
		$.each( json.data.data, function( key, value ) {
			html += "<tr>" + 
						"<td>" + value.courseType + "</td>" + 
						"<td>" + value.id + "</td>" + 
						"<td>" + value.slug + "</td>" + 
						"<td>" + value.name + "</td>" +
					"</tr>";
		})
		$('#content').html(html)

		var page = ""
		var totalPage = Math.ceil(json.data.total / json.data.per_page);
		for (var i = 1; i <= totalPage; i++) {
			if(i == json.data.current_page) {
				page += '<li class="page-item active"><a class="page-link" href="#" data-id="' + i + '">' + i + '</a></li>'				
			} else {
				page += '<li class="page-item"><a class="page-link" href="#" data-id="' + i + '">' + i + '</a></li>'
			}
		}
		$('#pagination-ui').html(page)
	})
}

$(function() {
    getData(1)
	
    $('#pagination-ui').on('click', 'a', function(event) {
    	getData($(this).data("id"))
    })
});
