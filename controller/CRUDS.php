<?php
	interface CRUDS
	{

		public function create();
		public function read();
		public function update();
		public function delete();
		public function select($field,$search);
	}