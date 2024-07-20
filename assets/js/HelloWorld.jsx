import React from 'react';
import PropTypes from 'prop-types';

const HelloWorld = ({ name }) => {
    return (
        <div>
            <h1>Hello, {name}!</h1>
        </div>
    );
};

HelloWorld.propTypes = {
    name: PropTypes.string.isRequired,
};

export default HelloWorld;
