wp.blocks.registerBlockType('impsyde/impsyde-table', {
    title: 'Impsyde-Table-Users',
    icon: 'table',
    category: 'common',
    attributes: {
      content: {type: 'string'},
      color: {type: 'string'}
    },
    edit: function(props) {
      return wp.element.createElement(
        "div",
        wp.element.createElement(
          "h3",
          "Impsyde Code Test"
        )
      );
    },
    save: function(props) {
    return null;
    }
  })