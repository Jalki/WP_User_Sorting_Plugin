wp.blocks.registerBlockType('ImpsydePlugin/User-Table', {
    title: 'Table-of-Users',
    label: 'Table of Users',
    icon: 'smiley',
    category: 'common',
    attributes: {
        content:{type: 'string'},
        color: {type: 'string'}
    },
    edit: function(props){
        return wp.element.createElement('input', {type: "text"});
    },
    save: function(props){
        return wp.element.createElement('table', null, 'This is Table for users');
    }
})