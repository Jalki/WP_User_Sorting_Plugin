wp.blocks.registerBlockType('impsyde/impsyde-table', {
    title: 'Impsyde-Table-Users',
    icon: 'smiley',
    category: 'common',
    attributes: {
      content: {type: 'string'},
      color: {type: 'string'}
    },
    edit: function(props) {
      function updateContent(event){
        props.setAttributes({content: event.target.value})
      }

      function updateContent(value){
        props.setAttributes({color: value.hex})
      }

      return wp.element.createElement(
        "div",
        null,
        wp.element.createElement(
          "table",
          null,
          wp.element.createElement(
            "tr",
            null,
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "ID"
                )
              ),
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "Name"
                )
              ),
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "Username"
                )
              ),
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "Email"
                )
              ),
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "Address"
                )
              ),
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "Phone"
                )
              ),
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "Website"
                )
              ),
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "Company"
                )
              )

            )
            
          ) 
      );
    },
    save: function(props) {
      return wp.element.createElement(
        "h3",
        null,
        {style: {border: "5px solid" + props.attributes.color} },
        props.attributes.content
      )
    }
})