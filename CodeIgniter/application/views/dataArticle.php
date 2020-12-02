<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Artikel</title>

</head>
<body>
    
        <h2>Daftar Artikel</h2>
        <a href=" <?php echo base_url('index.php/home/tambahArticle'); ?> ">Tambah Artikel</a>

            <p>Selamat Datang, <b><?php echo $this->session->userdata('username'); ?></b></p>
            <?php echo anchor('home/logout', 'Logout', ['class' => 'redDelete']); ?>	
            <br>
            <br>
            <hr>

        <?php
            if($this->session->flashdata('success') <> ''){
        ?>
            <p class="success"><?php echo $this->session->flashdata('success'); ?></p>
        <?php
                echo br(2 );
            } else if($this->session->flashdata('danger') <> ''){
        ?>
            <p class="danger"><?php echo $this->session->flashdata('danger'); ?></p>
        <?php
                echo br(2 );
            }
        ?>

            <?php foreach($dataArticle as $data){ ?>

                        <img src="<?php echo base_url('upload/') . $data->cover_img; ?>" alt="" width="300px" height="300px">
                        <br>
                        <a href=""><?php echo $data->title; ?></a>

                        <p> <?php echo substr($data->article, 0, 120) ?> </p>

                    <?php if($this->session->userdata('role') == 1 || $data->user_id == $this->session->userdata('id')){ ?>

                                <?php echo anchor('home/update/'.$data->id, 'Update', ['class' => '']); ?>	
                                <?php echo anchor('home/deleteArticle/'.$data->id, 'Hapus', ['class' => 'redDelete']); ?>	
                    <?php } ?>
                <hr>

            <?php } ?>
</body>
</html> 