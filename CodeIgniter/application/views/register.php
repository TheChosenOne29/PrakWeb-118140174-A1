<?php echo doctype('html5'); ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Register Data</title>

  </head>
  <body>

            <h2>Membuat Akun</h2>
            <?php
                if($this->session->flashdata('success') <> ''){
                    echo $this->session->flashdata('success');
                    echo br(2 );
                } else if($this->session->flashdata('danger') <> ''){
                    echo $this->session->flashdata('danger');
                    echo br(2 );
                }
            ?>
            <br>

            <?php

                validation_errors();

                $username = array(
                    'name'            => 'username',
                    'type'            => 'text',
                    'value'           => set_value('username'),
                    'class'           => 'form-login',
                    'placeholder'     => 'Username',
                );

                $password = array(
                    'name'            => 'password',
                    'type'            => 'password',
                    'placeholder'     => 'Password',
                    'class'           => 'form-login',
                    'value'           => set_value('password'),
                );

                $email = array(
                    'name'            => 'email',
                    'type'            => 'email',
                    'placeholder'     => 'Email',
                    'class'           => 'form-login',
                    'value'           => set_value('email'),
                );

                $submit = array(
                    'name'            => 'insertusers',
                    'type'            => 'submit',
                    'value'           => 'Tambah akun',
                    'class'           => 'form-button',
                    'placeholder'     => '',
                );

                echo  form_open_multipart('home/registerProcess');

                echo form_label('Username');
                    echo br(1);
                echo form_input($username);
                echo  form_error('username');
                    echo  br(2);

                echo form_label('Email');
                    echo br(1);
                echo form_input($email);
                echo  form_error('email');
                    echo  br(2);

                echo form_label('Password');
                    echo br(1);
                echo form_input($password);
                echo  form_error('password');
                    echo  br(2);

                echo  form_submit($submit);
                    echo br(2);

                echo form_close();

                if ($this->session->flashdata('sukses_insert_users') <> '') {
                echo $this->session->flashdata('sukses_insert_users');
                }

            ?>

            <?php echo anchor('home/', 'Kembali ke Login', ['class' => 'register']); ?>	
        </div>

  </body>
</html>
