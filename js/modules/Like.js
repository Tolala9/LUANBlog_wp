import $ from 'jquery';

class Like{
	constructor() {
		this.events();
	}

	events() {
		$(".star-box").on("click", this.ourClickDispatcher.bind(this));
	}

	// Methods
	ourClickDispatcher(e) {

		var currentStarBox = $(e.target).closest(".star-box");

		if (currentStarBox.attr('data-exist') == 'yes') {
			this.deleteLike(currentStarBox);
		} else {
			this.createLike(currentStarBox);
		}
	}

	createLike(currentStarBox) {
		$.ajax({
		beforeSend: (xhr) => {
			xhr.setRequestHeader('X-WP-Nonce', blogData.nonce);
		},
		url: blogData.root_url + '/wp-json/blog/v1/manageLike',
		type: 'POST',
		data: {'postId': currentStarBox.data('post')},
		success: (responce) => {
			currentStarBox.attr('data-exist', 'yes');
			var likeCount = parseInt(currentStarBox.find(".star-count").html(), 10);
			likeCount++;
			currentStarBox.find(".star-count").html(likeCount);
			currentStarBox.attr("data-star", responce)
			console.log(responce);
		},
		error: (responce) => {
			console.log(responce);
		},

	});
	}

	deleteLike(currentStarBox) {
		$.ajax({
			beforeSend: (xhr) => {
			xhr.setRequestHeader('X-WP-Nonce', blogData.nonce);
		},
		url: blogData.root_url + '/wp-json/blog/v1/manageLike',
		type: 'DELETE',
		data: {'like': currentStarBox.attr('data-star')},
		success: (responce) => {
			currentStarBox.attr('data-exist', 'no');
			var likeCount = parseInt(currentStarBox.find(".star-count").html(), 10);
			likeCount--;
			currentStarBox.find(".star-count").html(likeCount);
			currentStarBox.attr("data-star", '')
			console.log(responce);
		},
		error: (responce) => {
			console.log(responce);
		},

	});
	}


}
export default Like;