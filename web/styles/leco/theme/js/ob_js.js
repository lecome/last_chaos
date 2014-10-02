document.observe('dom:loaded', function () {
  $$('a[title]').each(function(element){ new Tip(element, element.title, { className: 'default', delay: 0.1 }); });
});
window.onload = function()
{
  if (self != top) top.location = self.location;
  jsClockTimeZone();
};