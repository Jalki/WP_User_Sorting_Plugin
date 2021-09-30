wp.blocks.registerBlockType('Impsyde_Code_Test_Table', {
    title: 'Table of Users',
    icon: x,
    category: 'common',
    attributes: {},
    edit: function(props){
        return wp.element.createElement("table", null);
    },
    save: function(props){
        return null
    }
})