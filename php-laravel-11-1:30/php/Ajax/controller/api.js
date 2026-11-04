// ======== LOAD DATA ===========
function loadData() {
    $.ajax({
        url: '../controller/select.php',
        type: 'GET',
        success: function (res) {
            $('#demo').html(res);
        }
    })
}

// ======== PREVIEW IMAGE ===========
function imagePreview(input, selector) {
    if (input.files && input.files[0]) {
        let imageURL = URL.createObjectURL(input.files[0])
        $(selector).attr('src', imageURL).show();
    }
}

// ======== LOAD VIEW LIST ===========
function loadIndex() {
    $('#app-container').load('index.php #app-container > *', function () {
        loadData()
    })
}


// ======== CREATE FORM ===============
function createPost(e) {
    e.preventDefault()
    let formdata = new FormData(this);
    $.ajax({
        url: '../controller/insert.php',
        type: 'POST',
        data: formdata,
        contentType: false,
        processData: false,
        success: function () {
            loadIndex();
        }

    })
}

// ========= VIEW ===============
function viewPost(id) {
    $.ajax({
        url: '../controller/view.php',
        type: 'GET',
        data: { id: id },
        success: function (res) {
            $('#app-container').html(res)
        }
    })
}


// ============ EDIT =============
function editPost(id){
    $.ajax({
        url: "../views/edit.php",
        type: "GET",
        data: {id: id},
        success: function(res){
            $("#app-container").html(res)
        }
    })
}

// ============ UPDATE ==============
function updatePost(form){
    let formdata = new FormData(form);
    $.ajax({
        url: "../controller/update.php",
        type: "POST",
        data: formdata,
        contentType: false,
        processData: false,
        success: function(){
            loadIndex()
        }
    })

}

// ========== DELETE POST ==========
function deletePost(id) {
    if (!confirm("Are you sure?")) return;
    $.ajax({
        url: '../controller/delete.php',
        type: 'POST',
        data: { id: id },
        success: function () {
            loadIndex();
        }
    })
}