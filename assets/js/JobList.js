    // function Show Job Grid
    document.getElementById('list').classList.add("actives");
    document.getElementById('borderList').style.border = "1px solid red"

    function showJobGrid() {
        document.getElementById('list').classList.remove("actives")
        document.getElementById('borderList').style.border = "";
        document.getElementById('grid').classList.add("actives");
        document.getElementById('borderGrid').style.border = "1px solid red";
        document.getElementById("job_grid").style.display = "block"
        document.getElementById('showJobList').style.display = "none";

    }

    // Function show job list

    function showJobList() {
        document.getElementById('list').classList.add("actives");
        document.getElementById('grid').classList.remove("actives");
        document.getElementById('borderList').style.border = "1px solid red"
        document.getElementById('borderGrid').style.border = "";
        document.getElementById("job_grid").style.display = "none"
        document.getElementById('showJobList').style.display = "block";
    }

    // ////// Jquery //////////////////////////////////

    // Click Job Location list

    $(document).ready(function() {
        $('#jobLocationList').on('click', () => {
            $(this).find('#checkBoxList').slideToggle('fast');
            $(this).find('#boxCategory').hide();
        })
    })

    // Click show Box Job Category List
    $(document).ready(function() {
            $('#jobCategoryList').on('click', () => {
                $(this).find('#boxCategory').slideToggle('fast');
                $(this).find('#checkBoxList').hide();
            })
        })
        // Moadal Form Email in Job-list
    var modal_email = document.getElementById("id03");

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener("click", function(eventss) {
        if (eventss.target == modal_email) {
            modal_email.style.display = "none";
        }
    });

    // all job list

    $(document).ready(function() {
        $('#alljobLocation').multiSelect({
            'noneText': 'Job Location' // Push checkbox in to Main box
        });

        $("#alljobcategory").multiSelect({
            'noneText': 'Job Category'
        })

    })