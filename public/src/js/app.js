$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
});

var postId = 0;
var timelinepostElement = null;
$('.timeline-panel').find('.panel-body').find('.interaction').find('#edit-modal').on('click', function (event) {
    event.preventDefault();

    timelinepostElement = event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[3];
    var timelinePost = timelinepostElement.textContent;
    postId = event.target.parentNode.parentNode.parentNode.dataset['postid'];
    $('#postcontent').val(timelinePost);
    $('#EditModal').modal();
});

$('#modal-save').on('click', function () {
    $.ajax({
            type: 'POST',
            url: '/edit',
            dataType:'json',
            data: {timelinePost: $('#postcontent').val(), postId: postId, _token: token}
        })
        .done(function (msg) {
           $(timelinepostElement).text(msg['new_timelinePost']);
           $('#EditModal').modal('hide');
        });
});

$('.like').on('click', function(event) {
    event.preventDefault();
    postId = event.target.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.previousElementSibling == null;
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, postId: postId, _token: token}
    })
        .done(function() {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
            if (isLike) {
                event.target.nextElementSibling.innerText = 'Dislike';
            } else {
                event.target.previousElementSibling.innerText = 'Like';
            }
        });
});