wp.blocks.registerBlockType('impsyde/impsyde-table', {
    title: 'Impsyde-Table-Users',
    icon: 'table',
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
      function updateContent(event){
        props.setAttributes({content: event.target.value})
      }

      return wp.element.createElement(
        "table",
          wp.element.createElement(
          "tr",
          wp.element.createElement(
            "td",
              wp.element.createElement("h3", null, "id")
          ),
          wp.element.createElement(
            "td",
            wp.element.createElement("h3", null, "name")
          ),
          wp.element.createElement(
            "td",
            wp.element.createElement("h3", null, "username")
          ),
          wp.element.createElement(
            "td",
            wp.element.createElement("h3", null, "email")
          ),
          wp.element.createElement(
            "td",
            wp.element.createElement("h3", null, "address")
          ),
          wp.element.createElement(
            "td",
            wp.element.createElement("h3", null, "phone")
          ),
          wp.element.createElement(
            "td",
            wp.element.createElement("h3", null, "website")
          ),
          wp.element.createElement(
            "td",
            wp.element.createElement("h3", null, "company")
          )
        )
      );
    }
  })