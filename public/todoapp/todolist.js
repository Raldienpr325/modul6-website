
$(document).ready(function() {
    $("#taskValue").keyup(function () { 
        if($("#taskValue").val()){
        $("#addBtn").addClass("active");
        }else{
        $("#addBtn").removeClass("active");
        }
    });
    // Show Tasks
    function loadTasks() {
        $.ajax({
            url: "action-show-tasks.php",
            type: "POST",
            success: function(data) {
                $("#tasks").html(data);
            }
        });
    }
    loadTasks();

    // Add Task
    $("#addBtn").on("click", function(e) {
        e.preventDefault();
        var task = $("#taskValue").val();
        $.ajax({
            url: "action-add-task.php",
            type: "POST",
            data: {task: task},
            success: function(data) {
                loadTasks();
                alert("Add Task : "+ task);
                    if(data == 1){
                  $("#addBtn").removeClass("active");
                  $("#taskValue").val('');
                }
                if (data == 0) {
                    alert("Error. Please try again.");
                }
                if(task == ""){
                    alert("TextField cannot be empty.");
                }
            }
        });
    });

    // Remove Task
    $(document).on("click", "#removeBtn", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: "action-remove-task.php",
            type: "POST",
            data: {id: id},
            success: function(data) {
                loadTasks();
                   alert("Remove Task id  : "+ id);
                if (data == 0) {
                    alert("Error. Please try again.");
                }
            }
        });
    });
    
    // Clear Task
    $(document).on("click", "#clearBtn", function(e) {
        e.preventDefault();
        $.ajax({
            url: "action-clear-task.php",
            type: "POST",
            success: function(data) {
                loadTasks();
                if (data == 1) {
                    alert("All Records has been deleted.");
                }
            }
        });
    });
});