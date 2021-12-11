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
          "table",
            wp.element.createElement(
            "tr",
            null,
            wp.element.createElement(
              "td",
              null,
                wp.element.createElement("h3", null, "id")
            ),
            wp.element.createElement(
              "td",
              null,
              wp.element.createElement("h3", null, "name")
            ),
            wp.element.createElement(
              "td",
              null,
              wp.element.createElement("h3", null, "username")
            ),
            wp.element.createElement(
              "td",
              null,
              wp.element.createElement("h3", null, "email")
            ),
            wp.element.createElement(
              "td",
              null,
              wp.element.createElement("h3", null, "address")
            ),
            wp.element.createElement(
              "td",
              null,
              wp.element.createElement("h3", null, "phone")
            ),
            wp.element.createElement(
              "td",
              null,
              wp.element.createElement("h3", null, "website")
            ),
            wp.element.createElement(
              "td",
              null,
              wp.element.createElement("h3", null, "company")
            )
          )
        )
        );
    },
    save: function(props) {
      function updateContent(event){
        props.setAttributes({content: event.target.value})
      }

      return null
    }
  })