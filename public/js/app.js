$(function() {
  /* :3 */
  while (application.length > 0) {
    (application.shift())();
  }
});