alert("Code for Custom Block");
import { registerBlockType } from '@wordpress/blocks';

registerBlockType('ImpsydePlugin/User-Table', {
    title: 'Table-of-Users',
    icon: 'smiley',
    category: 'common',
    attributes: {
        title:{}
    },
    edit: function(props){
        return createElement('input', {type: "text"});
    },
    save: function(props){
        return createElement('table', null, 'This is Table for users');
    }
});