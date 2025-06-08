import { useState, useEffect } from 'react';
import axios from 'axios';

function AuthorPage() {
  const [authors, setAuthors] = useState([]);
  const [name, setName] = useState('');

  const fetchAuthors = async () => {
    const res = await axios.get('http://localhost:8000/api/authors');
    setAuthors(res.data.data); // akses data sesuai response Laravel
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      await axios.post('http://localhost:8000/api/authors', { name });
      setName('');
      fetchAuthors();
    } catch (err) {
      console.error(err.response.data);
    }
  };

  useEffect(() => {
    fetchAuthors();
  }, []);

  return (
    <div>
      <h2>Authors</h2>
      <form onSubmit={handleSubmit}>
        <input
          type="text"
          value={name}
          placeholder="Author Name"
          onChange={(e) => setName(e.target.value)}
          required
        />
        <button type="submit">Add Author</button>
      </form>

      <ul>
        {authors.map((author) => (
          <li key={author.id}>{author.name}</li>
        ))}
      </ul>
    </div>
  );
}

export default AuthorPage;
