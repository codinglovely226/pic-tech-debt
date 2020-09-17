import PropTypes from 'prop-types';
import React from 'react';
import { Redirect, Route, Router, Switch } from 'react-router-dom';

import App from 'containers/App';
import ForgotPasswordPage from 'containers/ForgotPasswordPage';
import LoginPage from 'containers/LoginPage';
import NotFoundPage from 'containers/NotFoundPage';
import PicApp from 'containers/PicApp';

import { canViewDashboard, isAuthed } from 'utils/auth';

import { history } from './store';

const Routes = ({ store }) => (
  <Router history={history}>
    <App>
      <Switch>
        <Route
          exact
          path="/"
          render={() => (
                isAuthed(store)
                  ? (<PicApp />)
                  : (<Redirect to="/login" />)
              )}
        />
        <Route
          path="/settings"
          render={(props) => {
            if (isAuthed(store)) {
              if (canViewDashboard(store, props.history.location)) {
                window.location = '/settings';
              } else {
                window.location = '/';
              }
              return null;
              // eslint-disable-next-line no-else-return
            } else {
              return (<Redirect to="/login" />);
            }
          }}
        />
        <Route
          path="/dashboard"
          render={(props) => {
            if (isAuthed(store)) {
              if (canViewDashboard(store, props.history.location)) {
                window.location = '/dashboard';
              } else {
                window.location = '/';
              }
              return null;
              // eslint-disable-next-line no-else-return
            } else {
              return (<Redirect to="/login" />);
            }
          }}
        />
        <Route
          path="/analytics"
          render={(props) => {
            if (isAuthed(store)) {
              if (canViewDashboard(store, props.history.location)) {
                window.location = '/analytics';
              } else {
                window.location = '/';
              }
              return null;
              // eslint-disable-next-line no-else-return
            } else {
              return (<Redirect to="/login" />);
            }
          }}
        />
        <Route
          path="/login"
          render={() => (
              !isAuthed(store)
                ? (<LoginPage />)
                : (<Redirect to="/" />)
            )}
        />
        <Route
          path="/forgot-password"
          render={() => (
                !isAuthed(store)
                  ? (<ForgotPasswordPage />)
                  : (<Redirect to="/" />)
              )}
        />
        <Route component={NotFoundPage} />
      </Switch>
    </App>
  </Router>
  );

Routes.propTypes = {
  store: PropTypes.object,
};

export default Routes;
