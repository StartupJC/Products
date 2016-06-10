<?php

Class Product extends CI_Model{

	public function all()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
	}

	function create($post)
	{
		$query = "INSERT INTO products (name, description, price, created_at) VALUES (?,?,?,?)";
		$values = array($post['name'], $post['description'], $post['price'], date('Y-m-d H:i:s'));

		return $this->db->query($query, $values);
	}

	function find_by($id)
	{
		$query = "SELECT * FROM products WHERE id = ?";
		$values = array($id);

		return $this->db->query($query, $values)->row_array();
	}

	function edit($post, $id)
	{
		$query = "UPDATE products SET name=?, description=?, price=?, updated_at=? WHERE id = ?";
		$values = array($post['name'], $post['description'], $post['price'], date('Y-m-d H:i:s'), $id);

		return $this->db->query($query, $values);
	}

	function delete_item($id)
	{
		$query = "DELETE FROM products WHERE id = ?";
		$values = array($id);

		return $this->db->query($query, $values);
	}
}