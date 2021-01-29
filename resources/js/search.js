const text = document.querySelector('#searchtxt');

function comp(data) {
    var fou = `<ul class="people__list">` +
        `` +
        `                    <li class="people__person">` +
        `                        <div class="people__column">` +
        `                            <div class="people__avatar-container">` +
        `                                <a style="background-color: white;padding: unset"` +
        `                                   href="/profile/${data[0]}"> <img` +
        `                                       id="av" src="${data[1]}" class="people__avatar">` +
        `                                </a>` +
        `                            </div>` +
        `                            <div class="people__info">` +
        `                             <span` +
        `                                 class="people__username"></span>
        ` +
        `                               <span class="people__full-name text-dark font-weight-bold">${data[0]}</span>` +
        `                            </div>` +
        `                        </div>` +
        `                        <div class="people__column">` +
        `                       </div>` +
        `                    </li>` +
        `            </ul>`;
    return fou;
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#myform").submit(function (e) {

    e.preventDefault();

    $.ajax({
        type: 'GET',
        url: '/find/' + text.value,
        success: function (data) {
            if (data === 'User Not Found!') {
                document.getElementById('demo').style = 'color:red';
                document.getElementById('demo').innerHTML = 'User Not Found..';
            } else {
                document.getElementById('demo').innerHTML = comp(data);

            }

        }
        //data getting Successfully.
    });

});
