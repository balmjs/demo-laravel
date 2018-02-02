const $http = window.axios;

const callback = ({ status, message, data }) => {
  let result = {
    status,
    message,
    data
  };

  if (!status) {
    window.alert(message);
  }

  return result;
};

export {
  $http,
  callback
};
