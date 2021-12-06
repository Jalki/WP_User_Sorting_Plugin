wp.blocks.registerBlockType('impsyde/impsyde-table', {
    title: 'Impsyde-Table-Users',
    icon: 'smiley',
    category: 'common',
    attributes: {
      content: {type: 'string'},
      color: {type: 'string'}
    },
    edit: function(props) {
      function updateContent(event) {
        props.setAttributes({content: event.target.value})
      }
  
      function updateColor(value) {
        props.setAttributes({color: value.hex})
      }
  
      return wp.element.createElement(
        "div",
        null,
        wp.element.createElement(
          "h3",
          null,
          "Impsyde Code Test"
        ),
        wp.element.createElement("input", { type: "text", value: props.attributes.content, onChange: updateContent })
      );
    },
    save: function(props) {
      return wp.element.createElement(
        "h3",
        { style: { border: "5px solid " + props.attributes.color } },
        props.attributes.content
      );
    }
  })