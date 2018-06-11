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

		if (currentStarBox.data('exist') == 'yes') {
			this.deleteLike(currentStarBox);
		} else {
			this.createLike(currentStarBox);
		}
	}

	createLike(currentStarBox) {
		$.ajax({
		url: blogData.root_url + '/wp-json/blog/v1/manageLike',
		type: 'POST',
		success: (responce) => {
			console.log(responce);
		},
		error: (responce) => {
			console.log(responce);
		},

	});
	}

	deleteLike(currentStarBox) {
		$.ajax({
		url: blogData.root_url + '/wp-json/blog/v1/manageLike',
		type: 'DELETE',
		success: (responce) => {
			console.log(responce);
		},
		error: (responce) => {
			console.log(responce);
		},

	});
	}


}
export default Like;