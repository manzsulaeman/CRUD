<?php
class M_data extends CI_model {
    function input_data($data, $table) {
        // Perbaikan disini: Parameter pertama adalah nama tabel, parameter kedua adalah data yang akan dimasukkan
        return $this->db->insert($table, $data);
    }

    function tampil_data() {
        return $this->db->get('mahasiswa');
    }

    function edit_data($whare,$table) {
        return $this->db->get_where($table,$whare);
    }

    function update_data($whare,$data,$table) {
        $this->db->where($whare);
        $this->db->update($table,$data);
    }

    function hapus($whare,$table) {
        $this->db->where($whare);
        $this->db->delete($table);
    }


}
?>
