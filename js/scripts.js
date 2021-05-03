$(function() {
  $("form#healthSurvey").submit(function(event){
    event.preventDefault();
    var eventsCount = [];
    var symptomsCount = [];
    var relieverCount = [];

    $("input:checkbox[name=stressfulEvents]:checked").each(function() {
      var eventsResponse = eventsCount.push($(this).val());
    });
    $("input:checkbox[name=symptoms]:checked").each(function() {
      var symptomsResponse = symptomsCount.push($(this).val());
    });
    $("input:checkbox[name=stressRelievers]:checked").each(function() {
      var relieverResponse = relieverCount.push($(this).val());
    });
    if((eventsCount.length + symptomsCount.length) > relieverCount.length && (eventsCount.length + symptomsCount.length) >= 5) {
      $("#healthSurvey").hide();
      $("#veryUnhealthy").show();
    } else if((eventsCount.length + symptomsCount.length) < relieverCount.length && relieverCount.length >= 4) {
      $("#healthSurvey").hide();
      $("#veryHealthy").show();
    } else if((eventsCount.length + symptomsCount.length) > relieverCount.length)  {
      $("#healthSurvey").hide();
      $("#unhealthy").show();
    } else if((eventsCount.length + symptomsCount.length) < relieverCount.length) {
      $("#healthSurvey").hide();
      $("#healthy").show();
    } else if((eventsCount.length + symptomsCount.length) === relieverCount.length) {
      $("#healthSurvey").hide();
      $("#neutral").show();
    };
  });
});
