<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>

</head>
<body>    
        <h2>Tambah Artikel</h2>

    <?php validation_errors(); ?>
    <?php echo $error;?>

        <?php echo form_open_multipart('home/tambahArticles'); ?>
                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="title" placeholder="Masukkan judul artikel">
                <p><?php echo  form_error('title'); ?></p>

                <label>Artikel</label>
                <textarea class="form-control" name="article" rows="6"></textarea>
                <p><?php echo  form_error('article'); ?></p>

                <label>Masukkan gambar artikel</label><br>
                <input type="file" name="cover_img">
            <?php echo  form_error('cover_img'); ?>
            <br>
            <input type="submit" value="Tambah Artikel" class="btn btn-primary w-100">
        </form>

</body>
</html> 