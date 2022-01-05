//This function is to see if Jquery is loaded properly
window.onload = function()
{
  if (window.jQuery){
    //Jquery has loaded properly!
    alert("Jquery is properly working! Block will work as intended")
  }else{
    //Oh no! Its not working!
    alert("Jquery did not load properly! Block will not work as intended")
  }
}

function parsedata()
{
  
}

function selectelements()
{

}

wp.blocks.registerBlockType('impsyde/impsyde-table', {
    title: 'Impsyde-Table-Users',
    icon: 'dashicons-editor-table',
    category: 'common',
    attributes: {
      content: {
        type: 'array',
        source: 'children',
        selector: 'h3'
      },
      url:{
        type: "string",
        source: "attribute",
        selector: "a",
        attribute: "href"
      },
      data: {
        type: 'string'
      },
      id: {
        type: 'integer'
      },
      color: {type: 'string'},
    },
    edit: function(props) {
      function updateContent(event){
        props.setAttributes({content: event.target.value})
      }

      function updateContent(value){
        props.setAttributes({color: value.hex})
      }

      function updateContent(value){
        props.setAttributes({id: event.target.value})
      }

      return wp.element.createElement(
        "div",
        null,
        wp.element.createElement("script", {
          src: "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        }),
        wp.element.createElement(
          "table",
          {class: "user_table"},
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
                  "Id"
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
              ),
              wp.element.createElement(
                "td",
                null,
                wp.element.createElement(
                  "h3",
                  null,
                  "url"
                )
              )

            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                  "td",
                  null,
                  wp.element.createElement(
                    "select",
                    {class: "selections"},
                    {
                      name: "dropdown"
                    },
                    wp.element.createElement(
                      "option",
                      {
                        value: 1,
                        selected: true
                      },
                      "1"
                    ),
                    wp.element.createElement(
                      "option",
                      {
                        value: 2,
                      },
                      "2"
                    )
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