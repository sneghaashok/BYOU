function getParameterByName(name, url) {
  "use strict";
  if (!url) {
    url = window.location.href;
  }
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)", "i"),
    results = regex.exec(url);
  if (!results) {
    return null;
  }
  if (!results[2]) {
    return '';
  }
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var points = parseInt(getParameterByName("points"), 10);
var from = getParameterByName("from");

switch (from) {
case "depression":
  if (points < 3) {
    document.getElementById("results").innerHTML = "\n\n<center><b>No Depression</b></center>\n \n <br>You are more lucky than most or have developed a positive attitude toward life and an effective means of warding off depressive symptomatology.\n\n";
  } else if (points >= 3 && points <= 12) {
    document.getElementById("results").innerHTML = "\n\n<center><b>Mild Depression</b></center>\n\n <br>Some of the items you responded to are symptoms of major depression, but you do not meet the diagnostic criteria for this disorder. However, these can be serious symptoms, especially if feelings of hopelessness or thoughts of suicide are predominant for you. If this is the case, you should seek out assistance, either through a licensed professional or through a close friend or family member whom you feel you can trust.  It is likely that you have a specific concern that you should look at.\n\n";
  } else if (points > 12) {
    document.getElementById("results").innerHTML = "\n\n<center><b>Major Depression</b> </center>\n\n<br>You have endorsed many of the symptoms commonly seen in people who suffer from major depression.  You should be concerned about these symptoms and it is likely that close friends and family members are also concerned.  It is highly recommended that you consider seeing a psychiatrist or psychologist for an evaluation.  Depression is a serious disorder but is highly treatable.\n\n";
  }
  break;
case "anxiety":
  if (points === 0) {
    document.getElementById("results").innerHTML = "\n\n<center><b>No Anxiety</b></center>\n \n <br>You are more lucky than most and have been successful in warding off the symptoms of anxiety. Keep doing what you are doing and if you find anxiety or stress creeping up on you, recognize it and nip it in the bud.";
  } else if (points >= 1 && points <= 5) {
    document.getElementById("results").innerHTML = "\n\n<center><b>Mild Anxiety</b></center>\n \n <br>Some of the items you responded to are potential symptoms of anxiety. While you did not score high enough to be reliably diagnosed with anxiety, be sure you pay attention to your habits to detect possible anxiety in the future. \n\n";
  } else if (points > 5 && points <= 20) {
    document.getElementById("results").innerHTML = "\n\n<center><b>Moderate Anxiety</b></center>\n \n <br>Some of the items you responded to are symptoms of generalized anxiety disorder and other disorders in this category. Your general symptoms may be mild, but it might be wise to look into those items which you endorsed to determine if they are resulting in difficulties in your life.\n\n";
  } else {
    document.getElementById("results").innerHTML = "\n\n<center><b>Major Anxiety</b></center>\n \n <br>You have endorsed many of the symptoms commonly seen in people who suffer from generalized anxiety disorder and other disorders in this category. You worry excessively, feel out of control at times, and fear that things will go wrong even without information to support this. If anxiety is causing you distress or getting in the way of achieving your goals, recommendations would include looking into therapy, medication, or a group.";
  }
  break;
case "sleep":
  if (points === 0) {
    document.getElementById("results").innerHTML = "\n\n<center><b>No Sleep Deprivation</b></center>\n \n <br> You do not exhibit any of the signs of Sleep Deprivation.\n\n";
  } else if (points >= 1 && points <= 9) {
    document.getElementById("results").innerHTML = "\n\n<center><b>Mild Sleep Deprivation</b></center>\n \n <br>Based on your answers, it is possible that you are suffering from sleep deprivation. Remember, it's important to get at least 6 to 8 hours of sleep a night";
  } else if (points > 9 && points <= 18) {
    document.getElementById("results").innerHTML = "\n\n<center><b>Moderate Sleep Deprivation</b></center>\n \n <br> Based on your answers you are suffering from moderate Sleep Deprivation. If it continues long enough, sleep deprivation can lower your body's defenses, putting you at risk of developing chronic illness. Remember, its recommended that you get at least 6 to 8 hours of sleep a night";
  } else {
    document.getElementById("results").innerHTML = "\n\n<center><b>Major Sleep Deprivation</b></center>\n \n <br>Based on your answers you are suffering from Major Sleep Deprivation. If it continues long enough, it can lower your body's defenses, putting you at risk of developing chronic illness. It is important that catch up of sleep and that you try to get at least 8 hours of sleep a night moving forward, and consider making an appointment with your local physician.";
  }
  break;
}
