var userFeed = new Instafeed({
	get: 'user',
	target: "instafeed",
	resolution: 'standard_resolution',
	accessToken: 'IGQVJXNlVHVjVHd3MzN1ZAqU1NQdlVFTWRUdEVDU0M4U3VuUFRKcnE3b2ItTjVLZAzZAZAZAXJad2xYX2o5dXRHdkpZAY0JtMWJsMnpHT0VUTzFGZAFpQekFKTmtNMWJhRXBySUcwcnlKbUZAfRGxSSVZAtV3l3SQZDZD',
	limit: 8,

	template: '<div class="col-lg-3 instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
});
userFeed.run();
