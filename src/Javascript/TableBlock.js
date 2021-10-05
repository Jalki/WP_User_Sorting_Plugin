wp.blocks.registerBlockType('ImpsydePlugin/User-Table', {
    title: 'Table of Users',
    icon: 'smiley',
    category: 'common',
    edit: function(){
        return wp.element.createElement("table", null, "Table");
    },
    save: function(){
        return wp.element.createElement("table", null, "This is Table for users");
    }
})