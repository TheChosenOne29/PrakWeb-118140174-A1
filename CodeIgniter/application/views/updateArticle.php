<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbaharui Artikel</title>

</head>
<body>    
        <h2>Perbaharui Artikel</h2>

    <?php validation_errors(); ?>

        <?php foreach($article as $data){ ?>
        
        <?php echo form_open_multipart('home/updates'); ?>
            <input type="text" class="form-control" name="id" value="<?php echo $data->id; ?>">

                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="title" value="<?php echo $data->title; ?>" placeholder="Masukkan judul artikel">
                <p><?php echo  form_error('title'); ?></p>

                <label>Artikel</label>
                <textarea class="form-control" name="article" rows="4"> <?php echo $data->article; ?> </textarea>
                <p><?php echo  form_error('article'); ?></p>

                <label>Masukkan gambar artikel.</label><br>
                <img src="<?php echo base_url('upload/') . $data->cover_img; ?>" alt="" width="300px" height="300px"><br><br>
                <input type="file" name="cover_img"><br>
                <small>*Jika tidak ingin diganti, biarkan kosong.</small>

            <?php echo  form_error('cover_img'); ?>
            <br>
            <input type="submit" value="Perbaharui artikel">
        </form>
        <?php } ?>
</body>
</html> 