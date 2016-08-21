<?php
	Schema::create('events', function($table) {
		$table->increments('id');
		$table->timestamps();
		$table->integer('creator_id')->unsigned();
		$table->foreign('creator_id')->references('id')->on('codo_users');
		$table->string('title', 100);
		$table->dateTime('eventTime');
		$table->mediumText('location');
		$table->longText('description');
	});

	$mysqltime = date ("Y-m-d H:i:s", time());
	DB::table('events')->insert(
    array('title' => 'example event', 'eventTime' => $mysqltime, 'creator_id' => 1, 'location' => 'Sarlone, Bogwater tavern', 'description' => 'Tavern roleplaying.')
	);

?>