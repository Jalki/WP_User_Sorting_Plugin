wp.blocks.registerBlockType(
    //Name Parameter
    'impsydetest/usertable', 
    {
    title: i18n.__('User_Table'),
    description: i18n.__('A custom block made for the Impsyde Code test that upload a table of users'),
    icon: 'wordpress-alt',
    category: 'common',
    attributes: {
        title:{
            type: 'array',
            source: 'children',
            selector: 'h3'
        },
        subtitle:{
            type:'array',
            source: 'children',
            selector: 'h5'
        }
    },
    edit: (props) =>
    {
        var attributes = props.attributes
        var alignment = props.attributes.alignment
        var linkedURL = props.attributes.linkedURL
    },
    save: (props) => 
    {
        var attributes = props.attributes
        var alignment = props.attributes.alignment
        var linkedURL = props.attributes.linkedURL
    }
})