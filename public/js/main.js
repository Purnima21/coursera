function getData(page, searchValue) {
	var url = ''
	if(typeof searchValue !== 'undefined') {
		url = '/api/1.0/getData?page=1&pagesize=10&searchRole=' + searchValue;
	} else {
		url = '/api/1.0/getData?page=' + page + '&pagesize=10';
	}
	$.ajax({
	    url: url,
	    type: 'GET',
	})
	.done(function( json ) {
		var html = "";
		$.each( json.data.data, function( key, value ) {
			html += "<tr>" + 
						"<td>" + value.id + "</td>" + 
						"<td>" + value.name + "</td>" + 
						"<td>" + value.email + "</td>" + 
						"<td>" + value.department + "</td>" + 
						"<td>" + value.role + "</td>" + 
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

	$('#search').on('click', function(){
		getData('', $('#filter').val())
	})
	
    $('#pagination-ui').on('click', 'a', function(event) {
    	getData($(this).data("id"))
    })
});
