const $http = window.axios;

const callback = ({ status, message, data }) => {
  let result = {
    success: false,
    message,
    data
  };

  if (status) {
    result.success = true;
  } else {
    window.alert(message);
  }

  return result;
};

export {
  $http,
  callback
};
