<?php

# sembunyikan semua pesan erro bawaan PHP
error_reporting(0);

/**
 * Fungsi untuk menangani eror.
 * Fungsi ini wajib memiliki 4 parameter
 * dan nama parameter bisa bebas.
 */
function tanganiError ($level, $message, $file, $line) {
    echo "<div style='padding: 2rem; backround: rgba(200, 0, 0, 0.5; color: white'>";
    echo "<b>Terjadi Kesalahan !</b>";
    echo "<p>Level: {$level}</p>";
    echo "<p>Pesan: {$message}</p>";
    echo "<p>Letak file: {$file}</p>";
    echo "<p>Posisi line: {$line}</p>";
    echo "</div>";
}

set_error_handler ('tanganiError');

register_shutdown_function(function () {
    if (error_get_last()) {
        # ambil eror terakhir
        $error = (object) error_get_last();
        ob_get_clean();

        # hapus semua output sebelum terjadi error
        tanganiError(
            $error->type, $error->message, $error->file, $error->line
        );
    }
});



