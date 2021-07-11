<?php include 'partials/menu.php'; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add food</h1><br>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30k">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the food">
                    </td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" placeholder="Description of the food"></textarea>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include 'partials/footer.php'; ?>