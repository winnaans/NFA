import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import AuthorPage from './pages/admin/AuthorPage';
import GenrePage from './pages/admin/GenrePage';

function App() {
  return (
    <Router>
      <Routes>
        <Route path="/admin/authors" element={<AuthorPage />} />
        <Route path="/admin/genres" element={<GenrePage />} />
      </Routes>
    </Router>
  );
}

export default App;
