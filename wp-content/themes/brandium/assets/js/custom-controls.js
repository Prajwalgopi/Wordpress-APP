(function(api) {

  api.sectionConstructor['brandium-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const brandium_section_lists = ['banner', 'service'];
  brandium_section_lists.forEach(brandium_homepage_scroll);

  function brandium_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('brandium_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);