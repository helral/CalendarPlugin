<?php
	dispatch("calendar/", function(){
		$events = DB::table('events')->get();
		
		foreach ($events as $event)
		{
			$creator = DB::table('codo_users')->where('id', $event['creator_id'])->pluck('name');
			$html = "id: ";
			$html .= $event['id'];
			$html .= "<BR/>creator: ";
			$html .= $creator;
			$html .= "<BR/>title: ";
			$html .= $event['title'];
			$html .= "<BR/>event time: ";
			$html .= $event['eventTime'];
			$html .= "<BR/>location: ";
			$html .= $event['location'];
			$html .= "<BR/>description: ";
			$html .= $event['description'];
			$html .= "<BR/>";
			
			echo $html;
		}
	});

?>