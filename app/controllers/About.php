<?php

class About {
    public function index($nama = 'blabla', $pekerjaan = 'mhs')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}