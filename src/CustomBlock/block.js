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

$(function(){

  var $users = $('.users_table');

  $.ajax({
    type: 'GET',
    url: 'https://jsonplaceholder.typicode.com/users',
    success: function(users) {
      $.each(users, function(i, user){
        $users.append(
          wp.element.createElement(
            "tr",
            null,
            wp.element.createElement(
              "h3",
              null,
              '+ users.id +'
            )
          )
        );
      });
    }
  });
});

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
              )

            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#1"
              )
            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#2"
              )
            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#3"
              )
            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#4"
              )
            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#5"
              )
            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#6"
              )
            ),
            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#7"
              )
            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#8"
              )
            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#9"
              )
            ),

            wp.element.createElement(
              "tr",
              null,
              wp.element.createElement(
                "h3",
                null,
                "#10"
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