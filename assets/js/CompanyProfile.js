let allButtons = document.querySelectorAll('button');
textField.document.designMode = "On";
for (let i = 0; i < allButtons.length; i++) {
    allButtons[i].addEventListener('click', function() {
        var cmd = allButtons[i].getAttribute('data-cmd');
        if (allButtons[i].name === 'activeList') {
            allButtons[i].classList.toggle('activeList');

        } else {
            allButtons[i].classList.remove('activeList');
        }
        if (cmd === 'createLink') {
            let url = prompt("Enter Link: ", " ");
            textField.document.execCommand(cmd, false, url);
        } else {
            textField.document.execCommand(cmd, false, null);
        }
    })
}

//Function Upload Image function

$(document).ready(function() {
    $(document).on('change', '#upload-photo', function() {
        var displayImg = document.getElementById('upload-photo').files[0];
        var imgName = displayImg.name;
        var imgExtension = imgName.split('.').pop().toLowerCase();
        if (jQuery.inArray(imgExtension, ['gif', 'png', 'jpg', 'jpeg', 'svg']) == -1) {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'image is valid',
                showConfirmButton: false,
                timer: 1500
            })
        }
        var imgSize = displayImg.size;
        if (imgSize > 2000000) {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Image is very big',
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            var formImg = new FormData();
            formImg.append('upload-photo', displayImg);
            $.ajax({
                url: "Upload.php",
                method: "POST",
                data: formImg,
                contentType: false,
                chache: false,
                processData: false,
                beforeSend: function() {
                    $('#Display-img').html(" < p class = 'text-green-600' > Uploading.. < /p>");
                },
                success: function(data) {
                    $('#Display-img').html(data);
                }
            })

        }
    })
})


// Remove Img

function removeImg() {
    $('#Display-img').html('');


}
// Toggle box Job category in CompanyProfile

$(document).ready(function() {
    $('#jobCategoryList').on('click', function() {
        $(this).parent().find('#boxCategory').slideToggle('fast');
    })
})

//check all Box appen to JobCategoryList
var jobCategoryList = document.getElementById('jobCategoryList');
var allJobCategory = document.querySelectorAll('.jobProfile');
var arrayGetCategory = [];
for (var allJobCategorys of allJobCategory) {
    allJobCategorys.addEventListener('click', function() {
        if (this.checked == true) {
            document.getElementById('jobCategoryList').style.overflow = 'auto';
            arrayGetCategory.push(this.value);
            jobCategoryList.innerHTML = arrayGetCategory.join(',');

        } else {
            arrayGetCategory = arrayGetCategory.filter(e => e !== this.value);
            jobCategoryList.innerHTML = arrayGetCategory.join(',');
        }
    })
}

//Company Profile add to Database