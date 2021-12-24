wp.blocks.registerBlockType('impsyde/impsyde-table', {
    title: 'Impsyde-Table-Users',
    icon: 'smiley',
    category: 'common',
    attributes: {
      content: {type: 'string', source: 'text', selector: 'div'},
      color: {type: 'string'},

    },
    edit: function(props) {
      return null
    },
    save: function(props) {
      return wp.element.createElement(
        "div",
        wp.element.createElement(
          "h3",
          "Impsyde Code Test"
        )
      );
    }
})